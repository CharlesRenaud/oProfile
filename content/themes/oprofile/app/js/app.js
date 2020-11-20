require('jquery.scrollex');

var app = {

  init: function() {
    console.log('init');

    // On cible nos éléments
    app.$body = $('body');
    // est la version jQuery de document.querySelector('body);
    app.$banner = $('.banner');
    app.$header = $('.header');

    // On écoute l'événement click sur les éléments "ui-button"
    $('.ui-button').on('click', app.handleToggleMenu);

    // On va executer une méthode pour gérer l'apparence de notre header
    app.enableScrollex();

  },

  handleToggleMenu: function(event) {
    // on annule le comportement par défaut (on annule l'action du click sur le lien)
    event.preventDefault();

    console.log("tu as cliqué sur un ui-bouton !")

    // on "toogle" notre classe "menu-visible" sur le body
    // https://api.jquery.com/toggleclass/
    app.$body.toggleClass('menu-visible');

  },

  enableScrollex: function() {
    // https://www.npmjs.com/package/jquery.scrollex
    app.$banner.scrollex({
      leave: app.setHeaderFixed,
      enter: app.setHeaderUnfixed
    })
  },

  setHeaderFixed: function() {
    console.log("On fixe le header ! (on applique la class 'fixed')");
    // https://api.jquery.com/addClass/
    app.$header.addClass('fixed');
  },

  setHeaderUnfixed: function() {
    console.log("On défixe le header ! (on retire la class 'fixed')");
    // https://api.jquery.com/removeClass/
    app.$header.removeClass('fixed');
  }

};

$(app.init);
