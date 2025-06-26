
    <main class="d-flex">
      <button
        class="btn btn-danger position-fixed bottom-0 end-0 d-lg-none sidenavToggle"
        type="button"
        data-bs-toggle="collapse"
        data-bs-target="#sidenavContent"
        aria-controls="sidenavContent"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        ☰
      </button>

      <div
        class="sidenav-default collapse d-lg-flex col-lg-2 pb-5 pe-0 text-center text-lg-start sidenav shadow"
        id="sidenavContent"
      >
        <ul class="nav container align-items-md-start px-3 py-4 flex-column">
          <li class="nav-item w-100 border-bottom">
            <a class="nav-link py-3 active" href="#"
              >Painel Central</a
            >
          </li>
          <li class="nav-item w-100 border-bottom">
            <a class="nav-link py-3 " href="#">Conteúdo Passado</a>
          </li>
          <li class="nav-item w-100 border-bottom">
            <a class="nav-link py-3 " href="#">Lista de Dicas</a>
          </li>
        </ul>
      </div>

      <div class="col-md-12 col-lg-10 order-first order-lg-last overflow-auto">
        <div class="container-fluid h-100">
          <div class="row blocktd py-4">
            <div class="col justify-content-center">
              <div
                class="container d-flex flex-column justify-content-center h-100 dtip"
              >
                <p class="text-center my-1 p-1">Dica do Dia</p>
                <div class="card card-default cardfix p-2 overflow-y-auto">
                  <p class="card-text m-auto">
                    <?php
                      $diDDi = getDicadoDia();
                    ?>
                  </p>
                </div>
              </div>
            </div>
          </div>

          <div class="row flex-column flex-md-row blocktd py-4">
            <div class="col">
              <div class="container-fluid h-100">
                <p class="mb-1">Conteúdo 1</p>
                <div class="card card-default cardfix cardfixleft p-2 overflow-y-auto">
                  <p class="card-text">
                    “Qual foi o menor gesto de carinho ou gentileza que você
                    recebeu ou presenciou nos últimos dias? Como isso te
                    impactou mais do que você esperava?
                  </p>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="container-fluid h-100">
                <p class="mb-1 text-end">Conteúdo 2</p>
                <div class="card card-default cardfix cardfixright p-2 overflow-y-auto">
                  <p class="card-text">
                    “Qual foi o menor gesto de carinho ou gentileza que você
                    recebeu ou presenciou nos últimos dias? Como isso te
                    impactou mais do que você esperava?”
                  </p>
                </div>
              </div>
            </div>
          </div>

          <div class="row flex-column flex-md-row blocktd py-4">
            <div class="col">
              <div class="container-fluid h-100">
                <p class="mb-1">Conteúdo 1</p>
                <div class="card card-default cardfix cardfixleft p-2 overflow-y-auto">
                  <p class="card-text">
                    “Qual foi o menor gesto de carinho ou gentileza que você
                    recebeu ou presenciou nos últimos dias? Como isso te
                    impactou mais do que você esperava?
                  </p>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="container-fluid h-100">
                <p class="mb-1 text-end">Conteúdo 2</p>
                <div class="card card-default cardfix cardfixright p-2 overflow-y-auto">
                  <p class="card-text">
                    “Qual foi o menor gesto de carinho ou gentileza que você
                    recebeu ou presenciou nos últimos dias? Como isso te
                    impactou mais do que você esperava?”
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>
