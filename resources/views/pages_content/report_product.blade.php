<div class="card shadow">
    <div class="card-header bg-white text-white">
        <div class="row">
            <div class="col-12 col-sm-6 col-lg-6">
                <div class="row">
                    <div class="col">
                        <h5>Relatório de Produtos Cadastrados</h5>

                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-lg-6 ">
                <div class="row">
                    <div class="col">
                        <a href="{{ route('product_tag.pdf') }}" class="btn btn-danger btn-sm mb-2" title="Gerar Relatório" style="margin-left:80%;"><i class="fas fa-print"></i>&nbsp;Imprimir</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="card-body">

        <div class="row mt-1">
            <div class="col-12 col-sm-12 col-lg-12">
                <div class="table-responsive">
                    <table class="table table-hove" id="dataTable" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th>Tag</th>
                                <th>Quantidade de Produtos</th>
                            </tr>
                            <tbody>
                                @foreach ($product_tag as $product_tag)
                                <tr>
                                    <td>{{ $product_tag->name }}</td>
                                    <td>{{ $product_tag->contagem }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

</div>
