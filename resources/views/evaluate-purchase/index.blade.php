@extends('index')
@section('content')
    <div class='mb-5'>
        <div class='my-3'>
            <h3>
                <i class="bi bi-star-fill"></i> Avaliar Compra
            </h3>
        </div>
        <form class='form-control p-4'>
            <h4 class='subtitle-form'>
                Como você avalia sua compra de 1 a 5 ?
            </h4>
            <div class='container my-3 mx-auto'>
                <div class="row mb-3">
                    <div class="evaluate-purchase mt-5" id="avaliation">
                        <input type="radio" id="cm_star-empty" name="fb" value="" checked />
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
                <button class='btn btn-success mx-2'> <i class="bi bi-check"></i> Avaliar</button>
            </div>
        </form>
    </div>
    </div>
@endsection
