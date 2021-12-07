
<!-- 


< ?= $this->extend("layouts/default") ?>

< ? = $this->section("content") ?>

    <h1>Welcome</h1>

< ?= $this->endSection() ?>

-->





<!-- include header file -->
<?= $this->include("header") ?>
<?= $this->include("/layouts/default") ?>
<h1>Hello Tasks from view </h1>

<a href="<?=site_url("/tasks/new")?>" > New Task </a>


<ul>
<?php foreach($tasks as $task): ?>

    <li>
       
    <!--< ?=$task['id'] ?>-->
   <!-- <a href="/ci/public/tasks/show/< ?= $task['id'] ?>"> -->
    
    <a href="<?= site_url("/tasks/show/" . $task->id) ?>">

    
<!-- to prvent xss attack  using esc -->
    <?= esc($task->description) ?>
    <!-- < ?= esc($task['description']) ?> -->
</a>

    </li>

<?php endforeach; ?>

</ul>
    
</body>
</html>




