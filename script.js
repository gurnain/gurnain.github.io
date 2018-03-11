            var randomDimension = Math.round(Math.random()*300+150);

            function getRandomColor() {
                var letters = '0123456789ABCDEF';
                var color = '#';
                for (var i = 0; i < 6; i++) {
                    color += letters[Math.floor(Math.random() * 16)];
                }
                return color;
            }
            
            document.getElementById("circle").style.height = randomDimension+"px";
            document.getElementById("circle").style.width = randomDimension+"px";
            document.getElementById("circle").style.backgroundColor = getRandomColor();
            document.getElementById("circle").style.top = (Math.round(Math.random()*(590-randomDimension)))+"px";
            document.getElementById("circle").style.left = (Math.round(Math.random()*(1250-randomDimension)))+"px";
            document.getElementById("circle").style.borderRadius = (Math.random() < 0.5 ? 0 : 50)+"%";
            
            var timerStart = performance.now();
            
            function displayCircle () {
                
                randomDimension = Math.round(Math.random()*300+150);
                document.getElementById("circle").style.height = randomDimension+"px";
                document.getElementById("circle").style.width = randomDimension+"px";
                document.getElementById("circle").style.backgroundColor = getRandomColor();
                document.getElementById("circle").style.top = (Math.round(Math.random()*(590-randomDimension)))+"px";
                document.getElementById("circle").style.left = (Math.round(Math.random()*(1250-randomDimension)))+"px";
                document.getElementById("circle").style.borderRadius = (Math.random() < 0.5 ? 0 : 50)+"%";
                document.getElementById("circle").style.visibility = "visible";
                timerStart = performance.now();
            }
            
            
            document.getElementById("circle").onclick = function() {
                var timerEnd = performance.now();
                document.getElementById("time").innerHTML = ((timerEnd - timerStart)/1000).toFixed(3)+"s";
                document.getElementById("circle").style.visibility = "hidden";
                setTimeout(displayCircle, (Math.floor(Math.random()*3))*1000);
            }