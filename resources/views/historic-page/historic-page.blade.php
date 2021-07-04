@extends('index')
@section('content')

    <div class="row profile">
        <div class="col-md-3">
            <div>
                <div class="profile-userpic mt-3">
                    <img src="./images/user.png" class="img-responsive" alt="">
                </div>

                <div class="profile-usertitle-name pl-4 mt-2">
                    Usuário Compra Certa
                </div>
                <div class="menu-user mt-3">
                    <a class="navbar-brand" href="{{ url('/profile') }}">Meu Perfil</a>
                </div>
            </div>
        </div>
        <div class="col-md-9">
            <div class="profile-content">
                <form class='form-control p-2'>
                    <h3>
                        <i class="bi bi-hourglass-split"></i> Histórico de Compras
                    </h3>
                    <div class="container bootdey mb-5">
                        <div class="painel painel-default history-screen">
                            <table id="myHistoric" class="table table">

                            </table>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    {{-- CART MODAL --}}
    <div class="modal fade" id="cartModal" tabindex="-1" aria-labelledby="cartModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="cartModalLabel">Carrinho</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <table id="cart-table" class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">Quantidade</th>
                                <th scope="col">Nome</th>
                                <th scope="col">Preço un.</th>
                                <th scope="col">Valor a pagar</th>
                            </tr>
                        </thead>
                        <tbody id='cart-table-rows'>
                        </tbody>
                    </table>
                </div>
                <div class="modal-footer">
                    <div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    {{-- evaluate MODAL --}}
    <div class="modal fade" id="evaluateModal" tabindex="-1" aria-labelledby="evaluateModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="evaluateModalLabel">Avaliar Compra</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <div class='form-control p-4 mx-auto' id='evaluate'>
                        <h4 class='subtitle-form'>
                            Como você avalia sua compra de 1 a 5 ?
                        </h4>
                        <div class='container'>
                            <div class="row mb-3">
                                <div class="evaluate-purchase mt-5" id="avaliation">
                                    <input type="radio" id="cm_star-0" name="fb" value="" checked />
                                    <label for="cm_star-1"><i class="fa star"></i></label>
                                    <input type="radio" id="cm_star-1" name="fb" value="1" />
                                    <label for="cm_star-2"><i class="fa star"></i></label>
                                    <input type="radio" id="cm_star-2" name="fb" value="2" />
                                    <label for="cm_star-3"><i class="fa star"></i></label>
                                    <input type="radio" id="cm_star-3" name="fb" value="3" />
                                    <label for="cm_star-4"><i class="fa star"></i></label>
                                    <input type="radio" id="cm_star-4" name="fb" value="4" />
                                    <label for="cm_star-5"><i class="fa star"></i></label>
                                    <input type="radio" id="cm_star-5" name="fb" value="5" />
                                </div>
                            </div>
                            <div class='row mb-3'>
                                <label for="commentEvaluate" class="form-label">Comentários</label>
                                <textarea class="form-control" id="commentEvaluate" rows="3"></textarea>
                            </div>

                        </div>

                        <div class='d-flex flex-row-reverse'>
                            <a class='btn btn-success mx-2' id='btnSendEvaluate'> <i class="bi bi-check"
                                    onclick="sendEvaluate"></i>
                                Avaliar</a>
                        </div>
                    </div>

                    <div class='d-none' id='evaluated'>
                        <h4 class='subtitle-form'>
                            Sua Avaliação
                        </h4>
                        <div class='container my-3 '>
                            <div class="row mb-3 ">
                                <div class="evaluate-purchase mt-5" id="score-choice">
                                    <input type="radio" id="my_star-0" name="ev" value="" />
                                    <label for="my_star-1"><i class="fa star"></i></label>
                                    <input type="radio" id="my_star-1" name="ev" value="1" />
                                    <label for="my_star-2"><i class="fa star"></i></label>
                                    <input type="radio" id="my_star-2" name="ev" value="2" />
                                    <label for="my_star-3"><i class="fa star"></i></label>
                                    <input type="radio" id="my_star-3" name="ev" value="3" checked />
                                    <label for="my_star-4"><i class="fa star"></i></label>
                                    <input type="radio" id="my_star-4" name="ev" value="4" />
                                    <label for="my_star-5"><i class="fa star"></i></label>
                                    <input type="radio" id="my_star-5" name="ev" value="5" />
                                </div>
                            </div>
                            <div>
                                <h4 class='subtitle-form'>
                                    Comentário
                                </h4>

                                <p id='my-comment'>
                                </p>
                            </div>

                        </div>
                    </div>
                    <div class="modal-footer">
                        <div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('js/history.js') }}"></script>

@endsection
