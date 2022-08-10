// var
const message = document.querySelector("#message");
const count_text = document.querySelector(".message-count-text");

// set data message-count-text
count_text.textContent = `0/${message.maxLength}`;

// update message-count-text
message.addEventListener("input", () => {
   count_text.textContent = `${message.value.length}/${message.maxLength}`;
})