function truncateText(selector, maxLength) {
  var element = document.querySelector(selector);
  var truncated = element.innerText;

  console.log(element);
  if (truncated.length > maxLength) {
    truncated = truncated.substring(0, maxLength) + '...';
  }

  return truncated;
}

// Ini untuk max-length pada show
document.querySelector('p.content-show').innerText = truncateText('p.content-show', 350);