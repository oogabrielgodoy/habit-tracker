<x-layout>
    <main class="py-10">
        <section class="bg-white max-w-[600px] mx-auto p-10 border-2 mt-4">

            <h1 class="font-bold text-3x1 mb-4">
                Faça o login
            </h1>

            <p class="">Insira seus dados para acessar</p>


            <form action="/login" method="post" class="flex flex-col">
                @csrf
                <div class="flex flex-col gap-2 mb-4">
                    <label for="email">Email</label>
                    <input type="email" name="email" placeholder="seu@email.com.br"
                        class="bg-white p-2 border-2 @error('email') border-red-500 @enderror">
                    @error('email')
                        <p class="text-red-500 text-sm">{{ $message }}</p>
                    @enderror
                </div>
                <div class="flex flex-col gap-2 mb-4">
                    <label for="password">Senha</label>
                    <input type="password" name="password" placeholder="***********"
                        class="bg-white p-2 border-2 @error('password') border-red-500 @enderror">
                    <button type="submit" class="bg-white border-2 p-2">Entrar</button>
                    @error('password')
                        <p class="text-red-500 text-sm">{{ $message }}</p>
                    @enderror
                </div>
            </form>
        </section>
    </main>
</x-layout>
