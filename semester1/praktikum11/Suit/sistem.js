function computerPlay() {
        const choices = ['batu', 'gunting', 'kertas'];
        return choices[Math.floor(Math.random() * choices.length)];
      }

      function playRound(playerSelection) {
        playerSelection = playerSelection.toLowerCase();
        let computerSelection = computerPlay();
        if (playerSelection === computerSelection) {
          document.getElementById('result').innerHTML = "Seri! Kedua pemain memilih " + playerSelection;
        } else if (playerSelection === 'batu') {
          if (computerSelection === 'gunting') {
            document.getElementById('result').innerHTML = "Menang! Batu menghancurkan gunting";
          } else {
            document.getElementById('result').innerHTML = "Kalah! Kertas menutupi batu";
          }
        } else if (playerSelection === 'gunting') {
          if (computerSelection === 'kertas') {
            document.getElementById('result').innerHTML = "Menang! Gunting memotong kertas";
          } else {
            document.getElementById('result').innerHTML = "Kalah! Batu menghancurkan gunting";
          }
        } else if (playerSelection === 'kertas') {
          if (computerSelection === 'batu') {
            document.getElementById('result').innerHTML = "Menang! Kertas menutupi batu";
          } else {
            document.getElementById('result').innerHTML = "Kalah! Gunting memotong kertas";
          }
        }
      }