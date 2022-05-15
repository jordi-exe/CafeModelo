document.addEventListener('init', function(event) {
  var page = event.target;

  if (page.id === 'page1') {
    page.querySelector('#push-button').onclick = function() {
      document.querySelector('#myNavigator').pushPage('register.html', {data: {title: 'Registrate!'}});
    };
  } else if (page.id === 'register') {
    page.querySelector('ons-toolbar .center').innerHTML = page.data.title;
  }
});