document.getElementById('title').addEventListener('keyup', function (e) {
  let title = e.target.value
  document.getElementById('slug').value = title
    .split(' ')
    .join('-')
    .toLowerCase()
})
