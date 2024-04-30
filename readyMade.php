<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="readyMadeUsable container-fluid p-5 bg-secondary">
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Launch demo modal
            </button>

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptas enim excepturi error sit dolorem totam voluptates inventore nihil odio blanditiis, beatae aspernatur sunt delectus commodi dignissimos veniam similique, quaerat tenetur.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
                </div>
            </div>
            </div>
        </div>

        <div class="readyMadeUsable container-fluid p-5 bg-danger">
            <nav id="navbar-example2" class="navbar bg-secondary px-3 mb-3">
                <a class="navbar-brand" href="#">Navbar</a>
                <ul class="nav nav-pills">
                    <li class="nav-item">
                    <a class="nav-link" href="#scrollspyHeading1">First</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="#scrollspyHeading2">Second</a>
                    </li>
                    <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Dropdown</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#scrollspyHeading3">Third</a></li>
                        <li><a class="dropdown-item" href="#scrollspyHeading4">Fourth</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="#scrollspyHeading5">Fifth</a></li>
                    </ul>
                    </li>
                </ul>
            </nav>
            <div data-bs-spy="scroll" data-bs-target="#navbar-example2" data-bs-root-margin="0px 0px -40%" data-bs-smooth-scroll="true" class="scrollspy-example bg-body-tertiary p-3 rounded-2" tabindex="0">
            <h4 id="scrollspyHeading1">First heading</h4>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Assumenda vel eligendi magnam ullam illo. Consequuntur nisi, ullam placeat laborum nihil eveniet! Alias, quos optio recusandae ipsa consectetur dolor vitae velit.</p>
            <h4 id="scrollspyHeading2">Second heading</h4>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quisquam perspiciatis placeat iure dolorem deserunt quod dolore, repellat nesciunt ratione beatae odit ex? Optio sint reprehenderit sit, voluptates quo voluptatem doloribus.</p>
            <h4 id="scrollspyHeading3">Third heading</h4>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis ad, quas quaerat nesciunt aut repudiandae veritatis. Odio voluptatibus aperiam illo quam aspernatur, deleniti, id dolor deserunt perspiciatis cumque sequi explicabo.</p>
            <h4 id="scrollspyHeading4">Fourth heading</h4>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis assumenda animi corrupti velit ipsa, error adipisci asperiores cupiditate dolore maiores natus nisi laudantium. Enim rem minima aut dignissimos nisi sunt?</p>
            <h4 id="scrollspyHeading5">Fifth heading</h4>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas obcaecati, necessitatibus maiores eligendi perferendis officiis nobis, iure praesentium ducimus enim dolores voluptatum. Similique sit officiis incidunt quod exercitationem pariatur dolorem.</p>
            </div>
        </div>
</body>
</html>