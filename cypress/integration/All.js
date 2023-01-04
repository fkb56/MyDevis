describe('Test complet du site', () => {
	// it('Visite de la page d\'accueil', () => {
	// 	cy.visit('/')
	//	cy.url().should('include', '/')
	//	cy.title().should('include', 'MyDevis')
	// })
	//
	// it('Vérification barre de navigation', function () {
	// 	cy.get('a').contains('JSLS Peinture')
	// 	cy.get('a').children('i').should('have.class', 'fa-user')
	// });
	//
	// it('Vérification du footer', function () {
	// 	cy.get('a').contains('6 rue')
	// 	cy.get('a').contains('06')
	// 	cy.get('a').contains('Envoyer')
	// })
	//
	it('Visite liens accueil', function () {
		cy.visit('/contact')
		// 	cy.get('a').contains('Contact').click()
		// 	cy.url().should('include', '/contact')
		//	cy.title().should('include', 'Laravel')
	});

	// it('Vérification des labels & input', function () {
	// 	cy.get('label').contains('Nom')
	// 	cy.get('#grid-first-name').should('have.attr', 'placeholder', 'Nom')
	// 	cy.get('label').contains('Prénom')
	// 	cy.get('#grid-last-name').should('have.attr', 'placeholder', 'Prénom')
	// 	cy.get('label').contains('E-mail')
	// 	cy.get('#email').should('have.attr', 'placeholder', 'E-mail')
	// 	cy.get('label').contains('Téléphone')
	// 	cy.get('#phone').should('have.attr', 'placeholder', 'Numéro de téléphone')
	// 	cy.get('label').contains('Message')
	// 	cy.get('#message').should('have.attr', 'placeholder', 'Rentrez-votre message')
	// });
	//
	// it('Vérification du bouton submit', function () {
	// 	cy.get('button').should('have.attr', 'type', 'submit').contains('Envoyer')
	// });
		Cypress.Cookies.defaults({
			preserve: "csrftoken"
		})

	it('Vérification d\'affichage des erreurs', function () {
		cy.get('form').within(() => {
				// cy.get('input:invalide')
			// cy.get('form').submit()
			cy.get('button').should('have.attr', 'type', 'submit').contains('Envoyer').click()
		})
	});

	// it('Donnée formulaire', function () {
	// cy.get('#grid-first-name').type('Bouda').should('have.value', 'Bouda')
	// cy.get('#grid-last-name').type('Franck').should('have.value', 'Franck')
	// cy.get('#email').type('fkcb@live.fr').should('have.value', 'fkcb@live.fr')
	// cy.get('#phone').type('0641572444').should('have.value', '0641572444')
	// cy.get('#message').type('Test message').should('have.value', 'Test message')
	// cy.get('form').submit()
	// });

	// it('Vérification du footer', function () {
	// 	cy.get('a').contains('6 rue')
	// 	cy.get('a').contains('06')
	// 	cy.get('a').contains('Envoyer')
	// })

})
