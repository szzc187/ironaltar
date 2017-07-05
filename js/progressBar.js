    window.addEventListener('scroll', function(e) {
      var s = (window.pageYOffset !== undefined) ? window.pageYOffset : (document.documentElement || document.body.parentNode || document.body).scrollTop;
      var body = document.body;
      var html = document.documentElement;
      var d = Math.max(body.scrollHeight, body.offsetHeight, html.clientHeight, html.scrollHeight, html.offsetHeight);
      var c = window.innerHeight;
      var position = (s / (d - c)) * 100;
      document.getElementById('Progress-bar').setAttribute('style', 'width: ' + position + '%');
    });