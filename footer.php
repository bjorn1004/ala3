</div>
    <footer>
        <div class="jumbotron jumbotron-fluid">
            <ul>
                <li>sopranospizza@contact.com</li>
                <li>Lorem ipsum 22</li>
                <li>&copy; <?= date("Y"); ?> Sopranos Pizza</li>
                <li><a href="javascript:playAudio();">🍕</a></li>
            </ul>
        </div>
    </footer>
    <audio id="pizzadance">
        <source src="audio/Pizza_Dance.mp3" type="audio/mpeg">
    </audio>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="js.js"></script>
    <script>
        function spin() {
            document.getElementById('spinImg').classList.add('rotate');
            document.querySelector("body").style.fontFamily = 'Comic Sans MS'
            const el = document.querySelector(".container");
            del(el);
            setTimeout(function () {
                document.getElementById('spinImg').classList.remove('rotate');                
            }, 3000);
        }
        function del (el) {
        setTimeout(function () {
            el.removeChild(el.firstChild);
            spin();
        }, 1000);
        }
    </script>
    </body>

    </html>
