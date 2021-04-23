<div id="router" class="container-fluid bg-parceiros">
    <div class="my-2 py-4">
        <section class="container">
            <header class="col-md-12">
                <h2 class="text-center">SERVIÇOS DE CORTE - CNC ROUTER
                    <span class="underline"></span>
                </h2>
            </header>
            @foreach($videos_router as $video_router)
            <div class="row py-4">
                <div class="col-md-12 col-md-6 col-xs-12">
                    <div class="tabela-preco sombra">
                        <div class="preco-detalhe">
                            <h4 class="py-2">{{$video_router->title}}</h4>
                            <p class="text-secondary">
                                {{$video_router->desc}}
                            </p>
                            <div class="elementor-column-wrap elementor-element-populated">
                                <div class="elementor-widget-wrap">
                                    <div data-id="48e1e7c" class="elementor-element elementor-element-48e1e7c elementor-aspect-ratio-169 elementor-widget elementor-widget-video" data-settings="{&quot;aspect_ratio&quot;:&quot;169&quot;}" data-element_type="video.default">
                                        <div class="elementor-widget-container">
                                            <div class="elementor-wrapper elementor-fit-aspect-ratio elementor-open-inline">
                                                <iframe class="elementor-video-iframe" src="https://www.youtube-nocookie.com/embed/{{$video_router->url_hash}}?feature=oembed&amp;start&amp;end&amp;wmode=opaque&amp;loop=0&amp;controls={{($video_router->controls)?1:0}}&amp;mute={{($video_router->mute)?1:0}}&amp;showinfo=1&amp;rel=0&amp;modestbranding={{($video_router->modestbranding)?0:1}}" {{($video_router->fullscreen)?'allowfullscreen':''}}></iframe>		</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </section>
    </div>
</div>