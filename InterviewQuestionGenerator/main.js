function generate(){
    const listQuestions = [
    /*0*/'"What interests you most about this position?"',
    /*1*/'"In what way are you a good fit for this position?"',
    /*2*/'"What are you passionate about?"',
    /*3*/'"What motivates you?"',
    /*4*/'"What do you know about our company?"',
    /*5*/'"Where do you see yourself 5 years from now?"',
    /*6*/'"Why should we not hire you?"',
    /*7*/'"Why should we hire you?"',
    /*8*/'"If we will hire you, what can you bring to the table?"',
    /*9*/'"What is your expectation about our company?"',
    /*10*/'"What are your strength?"',
    /*11*/'"What are your weakness?"'
    ];
    // throwing the question into the div
    let randomNum = Math.floor((Math.random() * 11))
    document.getElementById('question').innerHTML = listQuestions[randomNum];

    switch(randomNum){
        case 0: var answer = "This job can help me to improve my skills and gain more experience and grow with your company."; break;
        case 1: var answer = "I'm a good fit for this position for a few reason, but most specifically because I'm willing to work hard to achieve the goals set by your company, I'm also a quick learner and self motivated, I'm confident I will bring value to your team and grow in this position."; break;            
        case 2: var answer = "I've always had a passion about programming and I'm hungry to learn more in this field, and for me, this is the activity that when I do it keeps me happy."; break;
        case 3: var answer = "What motivates me is my family, when I think of them it keeps mo to work harder and to keep positively."; break;
        case 4: var answer = "?"; break;
        case 5: var answer = "What I can see 5 years from now, If I we're be lucky to be chosen, I see myself having a higher position to your company and wishing to increase my work or task in order to help the company and have a skill growth."; break;
        case 6: var answer = "You shouldn't hire if your company is not looking for a hardworking, loyal and kind person. since I all have all those qualities."; break;
        case 7: var answer = "I know I don't have experience but I am willing to learn and I know I have the capability to adopt, and I am knowlegable on what job I am applying for."; break;
        case 8: var answer = "if you hire me I'll serve you with the loyalty, hardwork, good attitude and skills that I continue to improve for me and to your company"; break;
        case 9: var answer = "I expect this compamny to provide me with a supportive and encouraging work environment a company that values employee growth and also they will help me to upskill my skills and knowledge about programming."; break;
        case 10: var answer = "My strength is myself because I can understand and I can handle all the problems in calmness."; break;
        case 11: var answer = "My weaknes is my self confience and fear not to be successful son someday"; break;
        // case 12: var answer = " "; break;
        // case 13: var answer = " "; break;
    }

    // throwing the answer into the div
    document.getElementById('answer').innerHTML = answer;

    document.getElementById('questionBox').style.display="block";
    // document.getElementById('answerBox').style.display="block";


}


function switchmo(){
    let circle = document.getElementById('switchCircle');

    if(circle.innerHTML == '·'){//on
        document.getElementById('switchCircle').style.float = 'right';
        document.getElementById('switchBox').style.backgroundColor = '#2196f3';
        document.getElementById('switchTitle').innerHTML ='answer on';
        document.getElementById('switchCircle').innerHTML = '.';

        document.getElementById('answerBox').style.display = 'block';

        
        
    }else{//off
        document.getElementById('switchCircle').style.float = 'left';
        document.getElementById('switchBox').style.backgroundColor = '#607d8b';
        document.getElementById('switchTitle').innerHTML ='answer off';
        document.getElementById('switchCircle').innerHTML = '·';
        
        document.getElementById('answerBox').style.display = 'none';
    }
    
}