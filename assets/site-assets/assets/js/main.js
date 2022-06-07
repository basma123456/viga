$(function() {


    // Start Function to calculate main section height

    var navHeight = $("#navigator").innerHeight();
    var mainSection = $("#main-slider");
    var mainSectionHeight = window.innerHeight - navHeight + "px";

    mainSection.css("height", mainSectionHeight);

    // End Function to calculate main section height


    // Start Function for Cart progress Bar

    var addBar = $("#addons-bar");

    var addBtn = $(".addons-btn");

    addBtn.on("click", function() {
        addBar.attr("value", "100");
    });

    // End Function for Cart progress Bar

});