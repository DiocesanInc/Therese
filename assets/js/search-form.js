jQuery(document).ready(function ($) {
  $(".search-container .header-search").on("click", function () {
    $(this).toggleClass("hidden-mobile")
      .parent(".search-container")
      .find(".search-form")
      .toggleClass("active");
  });
});
