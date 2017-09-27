   var choiceArray = ["paper", "rock", "scissors"];

        var getUserChoice = function()
        {
            var userChoice = undefined;
            var userChoiceIndex = undefined;

            while (true)
            {
                userChoice = prompt("What do you choose rock, paper, or scissors?");
                userChoiceIndex = choiceArray.indexOf(userChoice);

                if (userChoiceIndex >= 0 && userChoiceIndex <= 2)
                    return userChoice;

                alert("Sorry that is an Invalid Choice, Please Try Again!");
            }
        }

        var getComputerChoice = function()
        {
            var computerChoiceIndex = Math.floor(Math.random() * 3);
            return choiceArray[computerChoiceIndex];
        }

        var decideWinner = function(userChoice, computerChoice)
        {
            if (userChoice === computerChoice)
                return "Its a tie!";

            if (userChoice === "paper")
            {
                if (computerChoice === "rock")
                {
                    return "paper wins!";
                }
                else //scissors
                {
                    return "scissors win!";
                }
            }
            if (userChoice === "rock")
            {
                if (computerChoice === "paper")
                {
                    return "paper wins!";
                }
                else //scissors
                {
                    return "rock wins!";
                }
            }
            else //scissors
            {
                if (computerChoice === "paper")
                {
                    return "scissors wins!";
                }
                else //rock
                {
                    return "rock wins!";
                }
            }
        }

        var runGame = function()
        {
            var userChoice = getUserChoice();
            var computerChoice = getComputerChoice();
            var gameResult = decideWinner(userChoice, computerChoice);rock
            finalGameResult = gameResult + "  " + ":)"
            alert(finalGameResult);
        }

        runGame();