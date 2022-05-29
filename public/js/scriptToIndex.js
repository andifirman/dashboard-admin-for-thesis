const BASE_OFFSET_HEIGHT = 24; //2 lines of text
const elementToAdd = "...";

//In codesandbox, DOMContentLoaded event might already be fired,
//hence, check for readyState
if (document.readyState !== "loading") {
  console.log("document is already ready");
  truncateText();
} else {
  document.addEventListener("DOMContentLoaded", function () {
    console.log("document was not ready");
    truncateText();
  });
}

// document.addEventListener("DOMContentLoaded", function () {
//   truncateText();
// });

function truncateText() {
  const allHeadlineDateContainer = document.querySelectorAll(
    ".headline-status-container"
  );
  for (const item of allHeadlineDateContainer) {
    const itemOffsetHeight = item.offsetHeight;
    if (itemOffsetHeight > BASE_OFFSET_HEIGHT) {
      const headlineTextObj = item.querySelector(".headline-text");
      if (headlineTextObj !== null) {
        const headlineTextAndLength = getTextAndLength(headlineTextObj);
        truncateTextToFit(headlineTextObj, headlineTextAndLength);
      }
    }
  }
}
function getTextAndLength(nodeObj) {
  if (nodeObj === null) {
    return {};
  }
  return {
    text: nodeObj.textContent?.trim(),
    length: nodeObj.textContent?.trim()?.length
  };
}

function truncateTextToFit(nodeObj, textAndLength) {
  if (isEmptyObject(textAndLength)) {
    return false;
  }
  for (let index = textAndLength.length; index > 1; index--) {
    let slicedString = textAndLength.text.slice(0, index);
    if (isTextFitsOnGivenLine(slicedString, nodeObj)) {
      break;
    }
  }
}

function isTextFitsOnGivenLine(slicedString, nodeObj) {
  nodeObj.textContent = slicedString + elementToAdd;
  return nodeObj.offsetHeight <= BASE_OFFSET_HEIGHT;
}

function isEmptyObject(obj) {
  for (let key in obj) {
    if (obj.hasOwnProperty(key)) {
      return false;
    }
  }
  return true;
}
