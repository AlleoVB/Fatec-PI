<main class="d-flex justify-content-center">
  <div class="col-10">
    <div class="d-flex flex-column justify-content-center row-gap-4 h-100 ">
      <div class="container-fluid">
        <h1 class="mx-auto mainlogo" style="display: flex; justify-content: center; align-items: center; max-width: 40rem; height: 20rem">
          C.A.R.E.
        </h1>
      </div>
      <div class="container-fluid">
        <p class="mx-auto" style="width: fit-content">
          Clarity, Awareness, Reflection, Embodiment
        </p>
      </div>
    </div>
  </div>
</main>

<!-- Toast Errors/Messages -->
<?php if (!empty($erro)) : ?>
<div class="position-fixed top-50 start-50 translate-middle" style="z-index: 1100;">
  <div class="toast align-items-center text-bg-danger border-0 show" role="alert" aria-live="assertive" aria-atomic="true">
    <div class="d-flex">
      <div class="toast-body">
        <?= htmlspecialchars($erro) ?>
      </div>
      <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
    </div>
  </div>
</div>
<?php endif; ?>

<?php if (!empty($mensagem)) : ?>
<div class="position-fixed top-50 start-50 translate-middle" style="z-index: 1100;">
  <div class="toast align-items-center text-bg-success border-0 show" role="alert" aria-live="assertive" aria-atomic="true">
    <div class="d-flex">
      <div class="toast-body">
        <?= htmlspecialchars($mensagem) ?>
      </div>
      <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
    </div>
  </div>
</div>
<?php endif; ?>

<!-- Modal Login/Signup -->
<div
  class="modal fade"
  id="loginModal"
  tabindex="-1"
  aria-labelledby="loginModalLabel"
  aria-hidden="true"
>
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content p-3">
      <button
        type="button"
        class="btn-close position-absolute top-0 end-0 mt-3 me-3"
        data-bs-dismiss="modal"
        aria-label="Close"
      ></button>
      <div class="row justify-content-center">
        <div class="col-md-6 login-area">
          <h3 class="text-center">Login</h3>
          <form action="" method="POST">
            <div class="mb-3">
              <label for="loginEmail" class="form-label">Email</label>
              <input
                type="email"
                class="form-control"
                id="loginEmail"
                required
              />
            </div>
            <div class="mb-3">
              <label for="loginPassword" class="form-label">Senha</label>
              <input
                type="password"
                class="form-control"
                id="loginPassword"
                required
              />
            </div>
            <button type="submit" class="btn btn-primary w-100">Entrar</button>
            <p class="text-center mt-3">
              Não tem uma conta? <a href="#" id="showSignup">Cadastre-se</a>
            </p>
          </form>
        </div>
        <div class="col-md-6 signup-area d-none">
          <h3 class="text-center">Cadastro</h3>
          <form action="" method="POST">
            <input type="hidden" name="acao" value="cadastrar">
            <div class="mb-3">
              <label for="signupName" class="form-label">Nome</label>
              <input
                type="text"
                class="form-control"
                name="nome"
                id="signupName"
                required
              />
            </div>
            <div class="mb-3">
              <label for="signupEmail" class="form-label">Email</label>
              <input
                type="email"
                class="form-control"
                name="email"
                id="signupEmail"
                required
              />
            </div>
            <div class="mb-3">
              <label for="signupPassword" class="form-label">Senha</label>
              <input
                type="password"
                class="form-control"
                name="senha"
                id="signupPassword"
                required
              />
            </div>
            <button type="submit" class="btn btn-success w-100">
              Cadastrar
            </button>
            <p class="text-center mt-3">
              Já tem uma conta? <a href="#" id="showLogin">Entrar</a>
            </p>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
