@extends('layout/user-dashboard')

@push('head')
    @vite(['resources/scss/register.scss'])
    @vite(['resources/scss/dashboard/user/income.scss'])
@endpush

@section('content')
    <div class="container_income">
        <!-- Modal Depositar -->
        <div id="myModal1" class="modal">
            <div class="modal_content">
                <span class="close" data-modal="#myModal1">&times;</span>
                <h1>Escolha a quantia</h1>
                <form action="{{ route('dashboard.user.deposit.update') }}" method="POST">
                    @csrf
                    @method('PUT')
                    <input name="money" type="number" placeholder="Valor" required>
                    <div class="container_button">
                        <button>Depositar</button>
                    </div>
                </form>
            </div>
        </div>

        <!-- Modal Sacar -->
        <div id="myModal2" class="modal">
            <div class="modal_content">
                <span class="close" data-modal="#myModal2">&times;</span>
                <img style="width: 50%"
                    src="https://cdn.discordapp.com/attachments/701489669673844887/1160569448399376399/47106.png?ex=65352386&is=6522ae86&hm=8d4f15c4d4586ec881968889d3e3a9383152e3a20d6b996233b43f3e12f99821&"
                    alt="Urubu">
                <h1>Você caiu em um golpe!!!!</h1>
            </div>
        </div>

        <div class="container_card_results">
            <p class="money">R$ {{ $fakeMoney }}</p>

            <div class="container_yield">
                <div class="triangle"></div>
                <p>900% do CDI</p>
            </div>
        </div>
        <div class="container_buttons">
            <button class="modal_btn" data-modal="#myModal1">Depositar</button>
            <button id="withdraw" class="modal_btn" data-modal="#myModal2">Sacar</button>
        </div>
    </div>
    </div>
@endsection

@push('scripts')
    <script>
        function toggleModal(modalId) {
            var modal = document.querySelector(modalId);
            if (modal) {
                modal.style.display = modal.style.display === "block" ? "none" : "block";
            }
        }

        var modalBtns = document.querySelectorAll(".modal_btn");
        modalBtns.forEach(function(btn) {
            btn.addEventListener("click", function() {
                var modalId = this.getAttribute("data-modal");
                toggleModal(modalId);
            });
        });

        var closeBtns = document.querySelectorAll(".close");
        closeBtns.forEach(function(btn) {
            btn.addEventListener("click", function() {
                var modalId = this.getAttribute("data-modal");
                toggleModal(modalId);
            });
        });

        window.addEventListener("click", function(event) {
            var modals = document.querySelectorAll(".modal");
            modals.forEach(function(modal) {
                if (event.target === modal) {
                    modal.style.display = "none";
                }
            });
        });
    </script>
@endpush
