
    <div class="container">
        <form action="calcular.php" method="post">

            <div class="row">
                <div class="col" id="col-1"></div>
                <div class="col" id="col-2">
                    <div class="mb-3">
                        <label for="" class="form-label">valor 1</label>
                        <input type="text" name="valor1" class="form-control" id=""
                        placeholder="primeiro valor">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Operacao</label>
                        <select  class="form-control" name="operacao" id="">
                            <option value="soma">Soma</option>
                            <option value="subtracao">Subtração</option>
                            <option value="multiplicacao">Multiplicação</option>
                            <option value="divisao">Divisão</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">valor 2</label>
                        <input type="text" name="valor2" class="form-control" id=""
                        placeholder="segundo valor">
                    </div>
                </div>
                <div class="col" id="col-3"></div>
            </div>
            <div class="row"><div class="text-center col"><input class="btn btn-success" type="submit" value="Calcular"></div></div>
        </form>
    </div>