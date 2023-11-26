// document.addEventListener('DOMContentLoaded', function() {
//     var prestationsCarousel = new bootstrap.Carousel(document.getElementById('prestationsCarousel'));
//   });
  
function showContent(contentId) {
    // Masquer tous les contenus
    var contents = document.querySelectorAll('.nav-item p');
    contents.forEach(function(content) {
        content.style.display = 'none';
    });

    // Afficher le contenu associé à l'onglet cliqué
    var selectedContent = document.getElementById(contentId);
    if (selectedContent) {
        selectedContent.style.display = 'block';
    }
}
