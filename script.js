/*
     var skillNum = 1;
     function GFG_Fun(){
        
        var form = document.getElementById("form");
        var FN = document.createElement("input");
        var LB = document.createElement("label");
        var FNSELF = document.createElement("input");
        var LBSELF = document.createElement("label");

        LB.setAttribute("for", "skill"+skillNum);
        LB.innerHTML = "Skill";

        FN.setAttribute("type", "text");
        FN.setAttribute("name", "skill"+skillNum);
        FN.setAttribute("id", "skill"+skillNum);
        FN.setAttribute("placeholder", "Skill");

        LBSELF.setAttribute("for", "selfEval"+skillNum);
        LBSELF.innerHTML = "Self Evaluation";

        FNSELF.setAttribute("type", "text");
        FNSELF.setAttribute("name", "selfEval"+skillNum);
        FNSELF.setAttribute("id", "selfEval"+skillNum);
        FNSELF.setAttribute("placeholder", "Skill");

        skillNum++;

        var BR = document.createElement("br");

        form.append(LB);
        form.append(FN);
        form.append(LBSELF);
        form.append(FNSELF);
        form.append(BR);
     }

    */
     function RedirectToProfile() {
          location.replace("profile.html")
     }
