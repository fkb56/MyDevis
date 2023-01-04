describe('Page d\'accueil', () => {
	it('Visite de la page d\'accueil', () => {
		cy.visit('/')
	})

	it('Vérification barre de navigation',  () => {
		cy.get('a').contains('JSLS Peinture')
		cy.get('a').children('i').should('have.class', 'fa-user')
	});

	it('Vérification du footer',  () => {
		cy.get('a').contains('6 rue')
		cy.get('a').contains('06')
			// .click().then(() => {
			// expect(cy.)
		// })
		cy.get('a').contains('Envoyer')
	})
})
