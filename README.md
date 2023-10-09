# Urubu-Do-Pix
 Project created for a backend test at Noweb. <br/>
 Made with Laravel and MySQL

<img src="https://cdn.discordapp.com/attachments/701489669673844887/1160221067147759726/urubu-do-pix-1.png?ex=6533df12&is=65216a12&hm=6ee52b107fef551fecdd4f8f4ec92bc400f69545d083db2631e6d4c5b715614d&" alt="Descrição da imagem" height="300">

# About the test

<h5>Email Noweb: </h5>

"Criar um crud  com no mínimo 2 tabelas tirando as padrões do laravel, precisa ter autenticação, algum teste personalizado (nada muito complexo), utilizar seeder e factory para algo (sem ser as padrões do laravel) não precisa ser em todas as tabelas, porém precisa ser utilizado pelo menos uma vez, pode utilizar qualquer biblioteca que for do seu agrado como alpinejs, livewire, filament... fica a sua escolha.

Caso queira pode também criar um endpoint de api (não obrigatório).

Nesse teste analisaremos sua organização de código e seu conhecimento no framework, nem um projeto complexo, quanto mais simples melhor."

<h5>Translate: </h5>

Create a CRUD system with a minimum of 2 tables, excluding Laravel's default features. It needs to include authentication, some custom testing (nothing too complex), and use seeders and factories for something (other than Laravel's defaults). It doesn't need to be applied to all tables, but it must be used at least once. You are free to use any library you prefer, such as Alpine.js, Livewire, Filament, and others – the choice is yours.

You may also optionally create an API endpoint if you wish.

In this test, we will assess your code organization and your knowledge of the framework. The goal is not to create a complex project; simpler is better.


# How this project work? 
The user can register on the site and deposit money to render, but they cannot withdraw their money!

The admin can view users in the list, read user information, and delete users.
The admin will check the total amount collected from the users.
The admin can create, delete, edit, and read posts about 'Urubu do Pix'.

# How to run this project?

create the .env, and configure your database connection

![image](https://github.com/LordBluue3/Urubu-Do-Pix/assets/58037508/411a11ee-e1c9-4fe0-8e64-12eaf84ec01f)

<br/>

<h4>To install the php dependencies</h4>

```bash
composer install
```

<h4>To run the migrations</h4>

```bash
php artisan migrate
```

<h4>To install the node dependencies</h4>

```bash
npm install
```

<h4>To run the vite server</h4>

```bash
npm run dev
```

<h4>To run the php server</h4>

```bash
php artisan serve
```
<h4>To run the seeders</h4>

```bash
 php artisan migrate:fresh --seed
```

<br/>

# To Do?

<h3>Front-End</h3>

Since this test is not for front-end, I focused on the back-end. <br/>

<ul>
    <li><s>Home Page</s></li>
    <li><s>Login Page</s></li>
    <li><s>Register Page</s></li>
    <li><s>User Dashboard</s></li>
    <li><s>Admin Dashboard</s></li>
</ul>

<h3>Back-End</h3>

I decided to write everything on my own so that Noweb can evaluate my code. <br/>

<ul>
    <li><s>Login System</s></li>
    <li><s>Register System</s></li>
    <li><s>Deposit Money System</s></li>
    <li><s>Edit the information (user) System</s></li>
    <li><s>System for posting updates about 'Urubu do Pix'. (crud)</s></li>
    <li><s>Seeders and Factory</s></li>
</ul>

<h3>Database</h3>

<ul>
    <li><s>User Table</s></li>
    <li><s>Admin Table</s></li>
    <li><s>Post Table</s></li>
</ul>
<br>

# Pages

<h3>Home Page</h3>

![image](https://github.com/LordBluue3/Urubu-Do-Pix/assets/58037508/304e1736-99a6-414c-b189-8a91e0998a7b)

<h3>Login and Register Page</h3>

![loginRegister](https://github.com/LordBluue3/Urubu-Do-Pix/assets/58037508/dac74f07-9b37-4d7e-97ff-d2f5cce7c447)


<h3>Admin Dashboard</h3>

![dashboardAdmin](https://github.com/LordBluue3/Urubu-Do-Pix/assets/58037508/91fc36d2-47e7-4707-bbe2-d7b3aa0d08f6)


<h3>User Dashboard</h3>

![dashboardUser](https://github.com/LordBluue3/Urubu-Do-Pix/assets/58037508/79aca3ea-a59b-4bc7-b869-b966e6ff77e3)





