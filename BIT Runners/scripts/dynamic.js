var cars = {
    developmentStart: ["1. How to get started"],
    htmlcss: ['1. Mijn profiel', '2. Mijn profiel - gestyled', '3. Inschrijfformulier', '4. Tournament Schedule', '5. Periodic Table', '6. * Google Copy *', '7. * Is Jarvis that difficult? *'],
    HTMLCSSAdvanced: ["1. CSS Advanced", "2. Flexbox Toegepast", "3. Position", "4. Project"],
    gitBeginner: ['1. Basics', '2. Workflow', '3. Teamwork', '4. * Git Puzzel *'],
    phpBeginner: ["1. Getting started", "2. New operations", "3. More operators??", "4. Language constructs", "5. * Multidimensional Arrays *"],
    phpNovice: ["1. Fruity Loops", "2. Strings 'n arrays", "3. Command line arguments", "4. Wisselgeld", "5. * Sentiment analysis *"],
    phpWeb: ["1. Let's web", "2. Cookies", "3. Whoops, error", "4. Web uitgebreid", "5. * Wisselgeld web *"],
    phpTogether: ["1. Galgje", "2. Rock Paper Scissors", "3. * Chatbot *", "4. * Quiz *"],
    project1BasisScrum: ["1. Project"],
    javaScriptIntroduction: [],
    databasesBeginner: [],
    databasePDO: [],
    project2VerdiepingScrum: [],
    project3EindprojectJaar1: [],
    stage1: []
}

// getting the main and sub menus


var main = document.getElementById('main_menu');
var sub = document.getElementById('sub_menu');


// Trigger the Event when main menu change occurs

main.addEventListener('change', function () {

    // getting a selected option

    var selected_option = cars[this.value];


    // removing the sub menu options using while loop

    while (sub.options.length > 0) {

        sub.options.remove(0);

    }

    //conver the selected object into array and create a options for each array elements 
    //using Option constructor  it will create html element with the given value and innerText

    Array.from(selected_option).forEach(function (el) {

        let option = new Option(el, el);

        //append the child option in sub menu

        sub.appendChild(option);

    });

});