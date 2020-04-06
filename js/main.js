/*  MENU
----------------------------------------------  */
function menu() {
	var burger = document.querySelector('.burger'),
		sidebar = document.querySelector('.sidebar'),
		close = document.querySelector('.close-sidebar');

	burger.onclick = function() {
		sidebar.classList.toggle('active');
		return false;
	}

	close.onclick = function() {
		sidebar.classList.remove('active');
		return false;
	}
}	

menu();

/*  SELECT
----------------------------------------------  */
var select = document.querySelectorAll('.select');

	for (var i = 0; i < select.length; i++) {
		var view = select[i].querySelector('.view');

		view.onclick = function() {
			var parent = this.closest('.select'),
				ul = parent.querySelector('ul'),
				li = ul.querySelectorAll('li'),
				view = parent.querySelector('.view');

			ul.classList.toggle('active');

			for (var j = 0; j < li.length; j++) {
				li[j].onclick = function() {
					view.innerHTML = this.innerHTML;
					ul.classList.remove('active');
				}
			}
		}
	}

/*  POPUP
----------------------------------------------  */
function Popup() {
	var btnPopup = document.querySelectorAll('.btn-popup'),
		overlay = document.querySelector('.popup-overlay'),
		$this = this;		

	for (var i = 0; i < btnPopup.length; i++) {
		btnPopup[i].addEventListener('click',	function(e) {
			$this.openPopup(this);
		});
	}

	this.openPopup = function(btn) {
		this.closePopupAll();

		var attPopup = btn.getAttribute('data-popup'),
			popup = document.querySelector('.' + attPopup),			
			close = popup.querySelectorAll('.main-close');

		$this.thisPopup = document.querySelector('.' + attPopup);

		overlay.classList.add('active');
		popup.classList.add('active');

		$this.closePopup(close, popup);
		$this.bages();
	}

	this.closePopup = function(close, popup) {
		for (var j = 0; j < close.length; j++) {
			close[j].onclick = function() {
				overlay.classList.remove('active');
				popup.classList.remove('active');

				return false;
			}
		}
	}

	this.closePopupAll = function() {
		var popup = document.querySelectorAll('.popup.active');
		for (var i = 0; i < popup.length; i++) {
			popup[i].classList.remove('active');
		}
	}
	

	this.bages = function() {
		var bagesList = document.querySelectorAll('.badges-item');
		

		for (var i = 0; i < bagesList.length; i++) {
			bagesList[i].onclick = function(e) {
				for (var i = 0; i < bagesList.length; i++) {
					bagesList[i].classList.remove('active');
				}

				this.classList.add('active');

				return false;
			}
		}

		if (document.querySelector('.badges-item.active') != null) {
			var activeBages = document.querySelector('.badges-item.active'),
				img = $this.thisPopup.querySelector('.wrap-item img');

			if (img != null)
				img.setAttribute('src', activeBages.querySelector('img').getAttribute('src'));
		}
	}	

	var activePopup = document.querySelector('.popup.active');

	if (activePopup != null) {
		var	activePopupClose = activePopup.querySelectorAll('.main-close');
		this.closePopup(activePopupClose, activePopup);
	}
}

var popup = new Popup();

/*  THEMES
----------------------------------------------  */
if (document.querySelectorAll('.circle-item') != null) {
	var circle = document.querySelectorAll('.circle-item');

	for (var i = 0; i < circle.length; i++) {
		circle[i].onclick = function(e) {
			for (var i = 0; i < circle.length; i++) {
				circle[i].classList.remove('active');
			}

			this.classList.add('active');
			
			return false;
		}
	}
}

/*  GRAPHICS
----------------------------------------------  */
function graphics() {
	window.chartColors = {
		red: 'rgb(255, 99, 132)',
		orange: 'rgb(255, 159, 64)',
		yellow: 'rgb(255, 205, 86)',
		green: 'rgb(75, 192, 192)',
		blue: '#3E58F0',
		purple: 'rgb(153, 102, 255)',
		grey: '#CFD9DF'
	};


	(function(global) {
		var MONTHS = [
			'January',
			'February',
			'March',
			'April',
			'May',
			'June',
			'July',
			'August',
			'September',
			'October',
			'November',
			'December'
		];

		var COLORS = [
			'#4dc9f6',
			'#f67019',
			'#f53794',
			'#537bc4',
			'#acc236',
			'#166a8f',
			'#00a950',
			'#58595b',
			'#8549ba'
		];

		var Samples = global.Samples || (global.Samples = {});
		var Color = global.Color;

		Samples.utils = {
			// Adapted from http://indiegamr.com/generate-repeatable-random-numbers-in-js/
			srand: function(seed) {
				this._seed = seed;
			},

			rand: function(min, max) {
				var seed = this._seed;
				min = min === undefined ? 0 : min;
				max = max === undefined ? 1 : max;
				this._seed = (seed * 9301 + 49297) % 233280;
				return min + (this._seed / 233280) * (max - min);
			},

			numbers: function(config) {
				var cfg = config || {};
				var min = cfg.min || 0;
				var max = cfg.max || 1;
				var from = cfg.from || [];
				var count = cfg.count || 8;
				var decimals = cfg.decimals || 8;
				var continuity = cfg.continuity || 1;
				var dfactor = Math.pow(10, decimals) || 0;
				var data = [];
				var i, value;

				for (i = 0; i < count; ++i) {
					value = (from[i] || 0) + this.rand(min, max);
					if (this.rand() <= continuity) {
						data.push(Math.round(dfactor * value) / dfactor);
					} else {
						data.push(null);
					}
				}

				return data;
			},

			labels: function(config) {
				var cfg = config || {};
				var min = cfg.min || 0;
				var max = cfg.max || 100;
				var count = cfg.count || 8;
				var step = (max - min) / count;
				var decimals = cfg.decimals || 8;
				var dfactor = Math.pow(10, decimals) || 0;
				var prefix = cfg.prefix || '';
				var values = [];
				var i;

				for (i = min; i < max; i += step) {
					values.push(prefix + Math.round(dfactor * i) / dfactor);
				}

				return values;
			},

			months: function(config) {
				var cfg = config || {};
				var count = cfg.count || 12;
				var section = cfg.section;
				var values = [];
				var i, value;

				for (i = 0; i < count; ++i) {
					value = MONTHS[Math.ceil(i) % 12];
					values.push(value.substring(0, section));
				}

				return values;
			},

			color: function(index) {
				return COLORS[index % COLORS.length];
			},

			transparentize: function(color, opacity) {
				var alpha = opacity === undefined ? 0.5 : 1 - opacity;
				return Color(color).alpha(alpha).rgbString();
			}
		};

		// DEPRECATED
		window.randomScalingFactor = function() {
			return Math.round(Samples.utils.rand(-100, 100));
		};

		// INITIALIZATION

		Samples.utils.srand(Date.now());

	}(this));

	var MONTHS = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];
	var config = {
		type: 'line',
		data: {
			labels: ['Feb', 'March', 'April', 'May', 'Jun', 'Jul', 'Aug'],
			datasets: [{
				label: 'My First dataset',
				backgroundColor: window.chartColors.blue,
				borderColor: window.chartColors.blue,
				data: [
					randomScalingFactor(),
					randomScalingFactor(),
					randomScalingFactor(),
					randomScalingFactor(),
					randomScalingFactor(),
					randomScalingFactor(),
					randomScalingFactor()
				],
				fill: false,
			}, {
				label: 'My Second dataset',
				fill: false,
				backgroundColor: window.chartColors.grey,
				borderColor: window.chartColors.grey,
				data: [
					randomScalingFactor(),
					randomScalingFactor(),
					randomScalingFactor(),
					randomScalingFactor(),
					randomScalingFactor(),
					randomScalingFactor(),
					randomScalingFactor()
				],
			}]
		},
		options: {
			responsive: true,
			title: {
				display: false,
				text: 'Chart.js Line Chart'
			},
			tooltips: {
				mode: 'index',
				intersect: false,
			},
			hover: {
				mode: 'nearest',
				intersect: true
			},
			scales: {
				xAxes: [{
					display: true,
					scaleLabel: {
						display: true,
						labelString: 'Month'
					}
				}],
				yAxes: [{
					display: true,
					scaleLabel: {
						display: true,
						labelString: 'Value'
					}
				}]
			}
		}
	};

	window.onload = function() {
		var ctx = document.getElementById('canvas-activity').getContext('2d');
		window.myLine = new Chart(ctx, config);

		
		new Chart(document.getElementById("canvas-popular"),{"type":"bar","data":{"labels":["January","February","March","April","May","June","July"],"datasets":[{"label":"My First Dataset","data":[65,59,80,81,56,55,40],"fill":false,"backgroundColor":["rgba(255, 99, 132, 0.2)","rgba(255, 159, 64, 0.2)","rgba(255, 205, 86, 0.2)","rgba(75, 192, 192, 0.2)","rgba(54, 162, 235, 0.2)","rgba(153, 102, 255, 0.2)","rgba(201, 203, 207, 0.2)"],"borderColor":["rgb(255, 99, 132)","rgb(255, 159, 64)","rgb(255, 205, 86)","rgb(75, 192, 192)","rgb(54, 162, 235)","rgb(153, 102, 255)","rgb(201, 203, 207)"],"borderWidth":1}]},"options":{"scales":{"yAxes":[{"ticks":{"beginAtZero":true}}]}}});
	};


}

graphics();