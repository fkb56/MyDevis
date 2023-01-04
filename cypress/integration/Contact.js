describe('Page contact', () => {

	it('Visite liens accueil', function () {
		cy.visit('/contact')
	});

	it('Vérification des labels & input', function () {
		cy.get('label').contains('Nom')
		cy.get('#grid-first-name').should('have.attr', 'placeholder', 'Nom')
		cy.get('label').contains('Prénom')
		cy.get('#grid-last-name').should('have.attr', 'placeholder', 'Prénom')
		cy.get('label').contains('E-mail')
		cy.get('#email').should('have.attr', 'placeholder', 'E-mail')
		cy.get('label').contains('Téléphone')
		cy.get('#phone').should('have.attr', 'placeholder', 'Numéro de téléphone')
		cy.get('label').contains('Message')
		cy.get('#message').should('have.attr', 'placeholder', 'Rentrez-votre message')
	});

	it('Vérification du bouton submit', function () {
		cy.get('button').should('have.attr', 'type', 'submit').contains('Envoyer')
	});

	// it('Vérification d\'affichage des erreurs', function () {
	// 	cy.get('form').submit()
	//
	// });

	it('Vérification du footer', function () {
		cy.get('a').contains('6 rue')
		cy.get('a').contains('06')
		cy.get('a').contains('Envoyer')
	})
})
