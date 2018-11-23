$(document).ready(function() {
	let vue_app = new Vue ({
		el: '#test',
		data: {
			show: true,
			showSearch: false,
			check: false,
			showDarkness: true,
			isDisabled:true,
			showMenu: false,
			searchString: '',
			showComponent: 4,
			articles: [
				'System CMS - prostota i bezpieczeństwo',
				'Domena, server, i poczta',
				'Project graficzny strony internetowej',
				'Pomoc powdrożeniowa',
				'współczesne standarty i responsywność',
				'Etapy realizacji projectu strony www',
				'Wysokie pozycje w wyszukiwarkach',
			],
			offers: [
				'Strone internetowe',
				'Sklepy internetowe',
				'Projectowanie graficzne',
				'Druk materiałow reklamowych',
				'Prezentacje i animacje 2D',
				'Copywriting',
			]
		},
		methods: {
			onshow() {
				this.show         = !this.show
				this.showMenu     = !this.showMenu
				this.showDarkness = !this.showDarkness					
			},
			submit() {
				
			}
		},
		computed: {
			isDisabled: {
				get() {
					return !this.check
				}
			}
		}
	})
})