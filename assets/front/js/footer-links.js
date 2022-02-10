let subpagesLi = [...document.getElementsByClassName('subpages-li')];
let up = [];
let down = [];
subpagesLi.forEach((link, i) => {
	up.push(false);
	down.push(false);
	let subpageBorder = link.getElementsByClassName('subpage-border')[0];

	link.addEventListener('mouseover', e => {
		if(e.toElement.classList.contains('subpage-border')) return;

		let i=0;
		if(i==0 && !down[i]) {
			up[i] = true;
			var width = 1;
			var id = setInterval(frame, 1);
			function frame() {
				if (width >= 51) {
					clearInterval(id);
					i = 0;
					up[i] = false
				} else {
					width++;
					subpageBorder.style.width = width*2 + "%";
					subpageBorder.style.backgroundColor = 'var(--first-color)';
				}
			}
		}
	})

	link.addEventListener('mouseout', e => {
		if(e.toElement.classList.contains('subpage-border')) return;

		let i=50;
		if(i==50 && !up[i]) {
			var width = 50;
			var id = setInterval(frame, 1);
			down[i] = true;
			function frame() {
				if (width <= 1) {
					clearInterval(id);
					i = 50;
					down[i] = false;
					subpageBorder.style.backgroundColor = '#5c5c5c';
				} else {
					width--;
					subpageBorder.style.width = width*2 + "%";
					subpageBorder.style.backgroundColor = 'var(--first-color)';
				}
			}
		}
	})
})