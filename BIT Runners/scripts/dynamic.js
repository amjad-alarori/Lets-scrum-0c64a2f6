var cars={
    DevelopmentStart:['HTML / CSS - Beginner', 'HTML / CSS - Advanced' , 'Git - Beginner', 'PHP - Beginner','PHP - Novice','PHP - Web','PHP - Together','Project 1 - Basis Scrum','JavaScript - Introduction','Databases - Beginner','Database - PDO','Project 2 - Verdieping Scrum','Project 3 - Eindproject Jaar 1','Stage 1'],
    htmlcss:['1. Mijn profiel', '2. Mijn profiel - gestyled', '3. Inschrijfformulier','4. Tournament Schedule','5. Periodic Table','6. * Google Copy *','7. * Is Jarvis that difficult? *'],
    gitbeginner:['1. Basics', '2. Workflow' , '3. Teamwork','4. * Git Puzzel *']
}

// getting the main and sub menus


var main= document.getElementById('main_menu');
var sub = document.getElementById('sub_menu');


// Trigger the Event when main menu change occurs

main.addEventListener('change',function(){

// getting a selected option

var selected_option = cars[this.value];


// removing the sub menu options using while loop



while(sub.options.length > 0){

sub.options.remove(0);

}


//conver the selected object into array and create a options for each array elements 
//using Option constructor  it will create html element with the given value and innerText



Array.from(selected_option).forEach(function(el){

    let option  = new Option(el, el);

    //append the child option in sub menu

    sub.appendChild(option);

});

});