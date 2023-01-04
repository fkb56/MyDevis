const login = require("../fixtures/login.json")
const categorie = require("../fixtures/categorie.json")

describe("Page de catégorie", () => {
	it('visite de la page catégorie sans login', () => {
		cy.visit('/categorie')
		cy.url().should('include', '/login')
		cy.url().should('eq', 'http://localhost:8000/login')
	})

	it('Connexion utilisateur', function () {
		cy.visit('/login')
		cy.url().should('include', '/login')
		cy.url().should('eq', 'http://localhost:8000/login')
		cy.get('form').within(()=>{
			cy.get('input[type=email]').type(login.email)
				.should("have.value", login.email);

			cy.get('input[type=password]').type(login.password)
				.should("have.value", login.password);

			cy.get('button').click();
		})
		cy.url().should('include', '/dashboard')
		cy.url().should('eq', 'http://localhost:8000/dashboard')

			cy.visit('/categorie')
			cy.url().should('include', '/categorie')
			cy.url().should('eq', 'http://localhost:8000/categorie')
			cy.get("button").contains( "Créer une catégorie").click()

		cy.get('form[name=categorie]').within(()=>{
			cy.get('input').type(categorie.name).should("have.value", categorie.name);

			cy.get('button').click();
		})

		cy.get("")
	});


})
