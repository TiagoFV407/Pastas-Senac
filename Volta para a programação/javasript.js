document.getElementById('sidebarToggle').addEventListener('click', function() {
    document.getElementById('sidebar').classList.toggle('active');
});

// JavaScript para alternar o conteudo principal
document.addEventListener('DOMContentLoaded', fuction() {
    const navLinks = document.querySelectorAll('#sidebar .nav-link');
    const contentSections = document.querySelectorAll('.content-section');
_
    function showContent(id) {
            contentSections.forEach(sections => {
                sections.style.display = 'nome' ; // Esconde todas as seções
            });
     document.getElementById(id).style.display = 'flex'; // Exibe a seção cor
    }

    // Exibir o conteúdo da Home por padrão  ao carregar a página
    showContent('homeContent');

    navLinks.forEach(link =>{
        link.addEventListener('click', function(event){
            event.preventfsefault(); // o
            
            navLinks.forEach()

        }
    }