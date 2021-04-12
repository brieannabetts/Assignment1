
const task = document.querySelector('ul');
const button = document.querySelector('button');

button.onclick = function() {
    let tasks = input.value;
    input.value = '';

    const task = document.createElement('li');
    const savebtn = document.createElement('button');
//---------------------------------------------------------------------------------
    /*create item through user input, delete button deletes item when user clicks, */
//---------------------------------------------------------------------------------
    task.textContent = tasks;
    task.appendChild(savebtn);
//---------------------------------------------------------------------------------
    /*create checkbox*/
//---------------------------------------------------------------------------------
    var checkbox = document.createElement('input');
    checkbox.type="checkbox";
  task.appendChild(checkbox);
//---------------------------------------------------------------------------------
    /*checkbox function to cross out the list item and send it to the bottom of the list
    when the checkbox is clicked*/
//---------------------------------------------------------------------------------
    checkbox.onclick= function (event) {
        const element = event.target;
        if(element.type === "checkbox") {
            if( element.checked ){
                task.style.textDecoration = "line-through";
              task.style.textDecorationColor = "red";
                task.style.opacity = 0.5;

                const parent = element.parentElement.parentElement;
                parent.appendChild(element.parentElement);
            }
            else{
                task.style.textDecoration = "none";
                task.style.opacity = 1;

                const parent = element.parentElement.parentElement;
                parent.insertBefore(element.parentElement, parent.firstChild);
            }
        }
    }

    input.focus();
}