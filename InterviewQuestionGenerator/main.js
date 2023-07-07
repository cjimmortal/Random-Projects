function generate(){
    const listQuestions = [
       "Tell me about yourself.",
       "What interests you most about this position?",
       "In what way are you a good fit for this position?",
       "What are you passionate about?",
       "What motivates you?",
       "What do you know about our company?",
       "Where do you see yourself 5 years from now?",
       "Why should we not hire you?",
       "Why should we hire you?",
       "If we will hire you, what can you bring to the table?",
       "What is your expectation about our company?",
       "What are your strength?",
       "What are your weakness?",
    ];
    document.getElementById('question').innerHTML = listQuestions[Math.floor((Math.random() * 13))];
}