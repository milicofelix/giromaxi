<div id="servicos" class="container-fluid py-4 bg-parceiros">
    <div class="my-2 py-4">
        <section class="container">
            <header class="col-md-12">
                <h2 class="text-center">Serviços
                    <span class="underline"></span>
                </h2>
            </header>
            <div class="row py-4 d-flex flex-fill">
                <div class="col-sm-6 col-md-3 col-xs-12 d-flex flex-fill">
                    <div class="tabela-preco sombra">
                        <div class="preco-detalhe">
                            <h5>Serviços de Corte - CNC Router</h5>
                            <ul>
                                <li>
                                    <a href="">
                                        <img src="{{ url('images/router.jpg') }}" alt="" class="img-fluid mx-auto d-block">
                                    </a>
                                </li>
                                <li>
                                    Trabalhamos com cortes e recortes personalizados em MDF, PS, Acrílico, Chapas de inox ,
                                    Chapas Galvanizadas, cortes de Letras e etc..

                                </li>
                            </ul>
                        </div>
                        @if($video_router_exists)
                            <div class="preco-botao text-center">
                                <a href="#router" class="btn btn-preco">Detalhes</a>
                            </div>
                        @endif
                    </div>
                </div>
                <div class="col-sm-6 col-md-3 col-xs-12 d-flex flex-fill">
                    <div class="tabela-preco sombra">
                        <div class="preco-detalhe">
                            <h5>Impressão Digital - UV e Solvente</h5>
                            <ul>
                                <li>
                                    <a href="">
                                        <img src="{{ url('images/impressora.jpg') }}" alt="" class="img-fluid mx-auto d-block">
                                    </a>
                                </li>
                                <li>
                                    Executamos uma grande variedade de serviços relacionais a impressão digital, Banners,
                                    Lonas, Faixas, Adesivos e outros, impressão UV ou Solvente conforme a necessidade.

                                </li>
                            </ul>
                        </div>
                        @if($video_exists)
                            <div class="preco-botao text-center">
                                <a href="#impressao" class="btn btn-preco">Detalhes</a>
                            </div>
                        @endif
                    </div>
                </div>
                <div class="col-sm-6 col-md-3 col-xs-12 d-flex flex-fill">
                    <div class="tabela-preco sombra">
                        <div class="preco-detalhe">
                            <h5>Mídia Externa</h5>
                            <ul>
                                <li>
                                    <a href="">
                                        <img src="{{ url('images/maquete-de-outdoor-em-branco_53876-12218.jpg') }}" alt="" class="img-fluid mx-auto d-block">
                                    </a>
                                </li>
                                <li>
                                    As nossos soluções de mídia externa são espaços publicitários em Outdoors e Totens
                                    digitais e tradicionais.

                                </li>
                            </ul>
                        </div>
                        @if($video_me_exists)
                            <div class="preco-botao text-center">
                                <a href="#midia_externa" class="btn btn-preco">Detalhes</a>
                            </div>
                        @endif
                    </div>
                </div>
                <div class="col-sm-6 col-md-3 col-xs-12 d-flex flex-fill">
                    <div class="tabela-preco sombra">
                        <div class="preco-detalhe">
                            <h5>Soluções Digitais</h5>
                            <ul>
                                <li>
                                    <a href="">
                                        <img src="{{ url('images/digital.jpg') }}" alt="" class="img-fluid mx-auto d-block">
                                    </a>
                                </li>
                                <li>
                                    Trabalhamos com as principais soluções digitais, desenvolvimento de sites, desenvolvimento
                                    de lojas virtuais, aplicativos para celular, monitoramento de Redes Sociais e mais.

                                </li>
                            </ul>
                        </div>
                        @if($video_sd_exists)
                            <div class="preco-botao text-center flex-fill">
                                <a href="#solucoes_digitais" class="btn btn-preco">Detalhes</a>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>