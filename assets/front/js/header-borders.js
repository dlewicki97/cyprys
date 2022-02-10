let headerLi = [...document.getElementsByClassName('header-li')];
let headerUp = [];
let headerDown = [];

headerLi.forEach((li, j) => {
	headerUp.push(false);
	headerDown.push(false);
	let left = li.getElementsByClassName('header-border-left')[0];
	let right = li.getElementsByClassName('header-border-right')[0];

	li.addEventListener('mouseover', e => {
		headerLi.forEach(li2 => {
			if(!e.toElement.classList.contains('header-borders') && !e.toElement.classList.contains('header-border-left') && !e.toElement.classList.contains('header-border-right')) {
				li2.getElementsByClassName('header-border-left')[0].style.background = 'transparent';
				li2.getElementsByClassName('header-border-left')[0].style.width = '1%';
				li2.getElementsByClassName('header-border-right')[0].style.background = 'transparent';
				li2.getElementsByClassName('header-border-right')[0].style.width = '1%';
			}
		})
		if(e.toElement.classList.contains('header-borders') || e.toElement.classList.contains('header-border-left') || e.toElement.classList.contains('header-border-right')) return;
			

		let i=0;
		if(i==0 && !headerDown[i]) {
			headerUp[i] = true;
			var width = 1;
			var id = setInterval(frame, 1);
			function frame() {
				if (width >= 51) {
					clearInterval(id);
					i = 0;
					headerUp[i] = false
				} else {
					width++;
					left.style.width = width + "%";
					left.style.background = 'var(--first-color)';

					right.style.width = width + "%";
					right.style.background = 'var(--first-color)';
				}
			}
		}

	})

	li.addEventListener('mouseout', e => {
		headerLi.forEach(li2 => {
			// if(!e.toElement.classList.contains('header-borders') && !e.toElement.classList.contains('header-border-left') && !e.toElement.classList.contains('header-border-right')) {
				li2.getElementsByClassName('header-border-left')[0].style.background = 'transparent';
				li2.getElementsByClassName('header-border-left')[0].style.width = '1%';
				li2.getElementsByClassName('header-border-right')[0].style.background = 'transparent';
				li2.getElementsByClassName('header-border-right')[0].style.width = '1%';
			// }
		})
		if( e.toElement.classList.contains('nav-link') || e.toElement.classList.contains('navbar') || e.toElement.classList.contains('nav-item') || e.toElement.classList.contains('header-borders') || e.toElement.classList.contains('header-border-left') || e.toElement.classList.contains('header-border-right')) return;

		console.log(e.toElement)
	

		let i=50;
		if(i==50 && !headerUp[i]) {
			var width = 50;
			var id = setInterval(frame, 1);
			headerDown[i] = true;
			function frame() {
				if (width <= 1) {
					clearInterval(id);
					i = 50;
					headerDown[i] = false;
					left.style.background = 'transparent';
					right.style.background = 'transparent';
				} else {
					width--;
					left.style.width = width + "%";
					left.style.background = 'var(--first-color)';

					right.style.width = width + "%";
					right.style.background = 'var(--first-color)';
				}
			}
		}
	})
})