const liste_element = ["Creation", "Parcours"];
const liste_creation = ["Sdis"];
const liste_parcours = ['Experience', 'Formation', 'Stage'];

$(function () {
    beginPage();
    hideAndShow("Main");

    $.each(liste_element, function (id, nom) {
        $("#block" + nom).hide();
        hideAndShow(nom);
    });

    $.each(liste_creation, function (id, nom) {
        $("#blockCreation" + nom).hide();
        hideAndShowCreation(nom);
    });

    $.each(liste_parcours, function (id, nom) {
        $("#blockParcours" + nom).hide();
        hideAndShowParcours(nom);
    });
});

function hideAndShow(id) {
    $("#btn" + id).click(function () {
        hideAll();
        if ($("#block" + id).is(":visible")) {
            $("#block" + id).fadeOut("slow", function () {});
        } else {
            $("#block" + id).fadeTo("slow", 1, function () {});
        }
    });
}

function hideAll() {
    $("#blockMain").hide();
    $.each(liste_element, function (id, nom) {
        $("#block" + nom).hide();
    });
}

function hideAndShowCreation(id) {
    $("#btnCreation" + id).click(function () {
        hideAllCreation();
        if ($("#blockCreation" + id).is(":visible")) {
            $("#blockCreation" + id).fadeOut("slow", function () {});
        } else {
            $("#blockCreation" + id).fadeTo("slow", 1, function () {});
        }
    });
}

function hideAllCreation() {
    $.each(liste_creation, function (id, nom) {
        $("#blockCreation" + nom).hide();
    });
}

function hideAndShowParcours(id) {
    $("#btnParcours" + id).click(function () {
        hideAllParcours();
        if ($("#blockParcours" + id).is(":visible")) {
            $("#blockParcours" + id).fadeOut("slow", function () {});
        } else {
            $("#blockParcours" + id).fadeTo("slow", 1, function () {});
        }
    });
}

function hideAllParcours() {
    $.each(liste_parcours, function (id, nom) {
        $("#blockParcours" + nom).hide();
    });
}

function beginPage() {
    $("#pres_1").hide();
    $("#pres_2").hide();
    $("#pres_3").hide();


    $("#pres_1").fadeTo("slow", 1, function () {});
    setTimeout(function () {
        $("#pres_2").fadeTo("slow", 1, function () {});
        setTimeout(function () {
            $("#pres_3").fadeTo("slow", 1, function () {});
        }, 1000);
    }, 1000);

}
