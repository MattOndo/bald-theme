(function() {
  const links = document.querySelectorAll('.editor-styles-wrapper .wp-block-acf-button a');
  links.forEach(link => {
    link.addEventListener('click', e => {
      console.log(link);
      e.preventDefault();
    });
  });
})()