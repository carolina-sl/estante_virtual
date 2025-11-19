
describe('Listagem de livros', () => {
    it('Deve carregar a página de listagem de livros', () => {

        // acessa a página
        cy.visit('/livros');

        // verifica se o título da página existe
        cy.contains('Livros').should('be.visible');

        // Verifica se a tabela aparece (caso exista)
        cy.get('table').should('exist');

        // Verifica se existem linhas na tabela (caso já tenha livros)
        cy.get('table tbody tr').should('have.length.greaterThan', 0);

        // conferir se aparece algum campo típico
        cy.contains('Título').should('be.visible');
        cy.contains('AUTOR').should('be.visible');


    });
});