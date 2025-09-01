<div class="mt-6 grid grid-cols-2 gap-2">
    <div class="border border-stone-700 rounded">
        <h1 class="border-b border-stone-700 text-stone-400 font-bold px-4 py-2">Login</h1>
        <form action="/login" method="POST" class="p-4 space-y-4">
            <div class="flex flex-col">
                <label for="email" class="text-stone-400 mb-1">Email</label>
                <input 
                type="email" 
                name="email" 
                class="border-stone-800 border-2 rounded-md bg-stone-900 text-sm focus:outline-none px-2 py-1" 
                placeholder="Digite seu email...">
            </div>

            <div class="flex flex-col">
                <label for="password" class="text-stone-400 mb-1">Senha</label>
                <input 
                type="password" 
                name="password" 
                class="border-stone-800 border-2 rounded-md bg-stone-900 text-sm focus:outline-none px-2 py-1" 
                placeholder="Digite sua senha...">
            </div>

            <button type="submit" class="border-stone-800 bg-stone-900 text-stone-400 px-4 py-1 rounded-md border-2 hover:bg-stone-800">Logar</button>
        </form>
    </div>

    <div class="border border-stone-700 rounded">
        <h1 class="border-b border-stone-700 text-stone-400 font-bold px-4 py-2">Registro</h1>
        <form action="/registrar" method="POST" class="p-4 space-y-4">

        <?php if($strlen($mensagem) > 0): ?>
            <div class="border-green-800 bg-green-900 text-green-400 px-4 py-1 rounded-md border-2">
                <?=$mensagem?>
            </div>
        <?php endif; ?>

        <div class="flex flex-col">
                <label for="name" class="text-stone-400 mb-1">Nome</label>
                <input 
                type="text" 
                name="name" 
                class="border-stone-800 border-2 rounded-md bg-stone-900 text-sm focus:outline-none px-2 py-1" 
                placeholder="Digite seu nome...">
            </div>
            <div class="flex flex-col">
                <label for="email" class="text-stone-400 mb-1">Email</label>
                <input 
                type="email" 
                name="email" 
                class="border-stone-800 border-2 rounded-md bg-stone-900 text-sm focus:outline-none px-2 py-1" 
                placeholder="Digite seu email...">
            </div>

            <div class="flex flex-col">
                <label for="email_confirmed" class="text-stone-400 mb-1">Confirme seu email</label>
                <input 
                type="email" 
                name="email_confirmed" 
                class="border-stone-800 border-2 rounded-md bg-stone-900 text-sm focus:outline-none px-2 py-1" 
                placeholder="Confirme seu email...">
            </div>

            <div class="flex flex-col">
                <label for="password" class="text-stone-400 mb-1">Senha</label>
                <input 
                type="password" 
                name="password" 
                class="border-stone-800 border-2 rounded-md bg-stone-900 text-sm focus:outline-none px-2 py-1" 
                placeholder="Digite sua senha...">
            </div>
            <button type="reset" class="border-stone-800 bg-stone-900 text-stone-400 px-4 py-1 rounded-md border-2 hover:bg-stone-800">Cancelar</button>
            <button type="submit" class="border-stone-800 bg-stone-900 text-stone-400 px-4 py-1 rounded-md border-2 hover:bg-stone-800">Cadastrar</button>
        </form>
    </div>
</div>