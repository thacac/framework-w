document.addEventListener('DOMContentLoaded', function () {
  const options = {
    'edge':'left'
  }
 
  var elems = document.querySelectorAll('.sidenav')
  var instances = M.Sidenav.init(elems, options)
  instances.open()
  var collapsibleElem = document.querySelector('.collapsible')
  var collapsibleInstance = M.Collapsible.init(collapsibleElem, options)
});