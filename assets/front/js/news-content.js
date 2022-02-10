setNewsContentsHeight(undefined);

function setNewsContentsHeight(decrease) {
	
	let newsContent = [...document.getElementsByClassName('news-content')];
	let height = 0;
	newsContent.forEach(content => {
		content.getBoundingClientRect().height > height ? height = content.getBoundingClientRect().height : true
	})
	newsContent.forEach(content => {
		let status = undefined;
		if(decrease || decrease == undefined) status = content.getBoundingClientRect().height > height;
		else status = content.getBoundingClientRect().height < height;
		status ? height = content.getBoundingClientRect().height : true
	});
	newsContent.forEach(content => content.style[`${!decrease ? 'min' : 'max'}Height`] = height + 'px');
}
width = 0;
$(window).resize(function(e){
	console.log(width, width > e.target.outerWidth)
	width = e.target.outerWidth;
	setNewsContentsHeight(width > e.target.outerWidth);
});