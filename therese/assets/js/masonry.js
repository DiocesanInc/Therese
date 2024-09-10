jQuery(document).ready(($)=>{
  const $grid = $('.mass-times-container').masonry({
    itemSelector: '.mass-times-section',
    columnWidth: 1,
    gutter: 40,
    fitWidth: true
  });
    const $grid2 = $('.category .grid-container').masonry({
      itemSelector: 'article',
      columnWidth: 1,
      gutter: 40,
      fitWidth: true
    });
});
