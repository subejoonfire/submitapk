</main>
<!-- /Main -->
</div> <!-- /flex -->

<!-- Footer -->
<footer class="bg-grey-darkest text-white p-2 mt-auto">
    <div class="flex justify-between">
        <div>&copy; My Design</div>
        <div>Distributed by: <a href="https://themewagon.com/" class="text-white underline"
                target="_blank">Themewagon</a></div>
    </div>
</footer>
<!-- /Footer -->

</div> <!-- /min-h-screen -->
</div> <!-- /mx-auto -->

<!-- Scripts -->
<script src="<?= base_url('Assets/main.js') ?>"></script>
<script>
document.addEventListener('DOMContentLoaded', function() {
    const dropdown = document.querySelector('.pages-dropdown');
    const submenu = dropdown?.nextElementSibling;
    const icon = dropdown?.querySelector('.fa-angle-down');

    dropdown?.addEventListener('click', function(e) {
        e.preventDefault();
        submenu?.classList.toggle('hidden');
        submenu?.classList.toggle('show');
        icon?.classList.toggle('rotate-icon');
    });
});

function profileToggle() {
    const dropdown = document.getElementById("ProfileDropDown");
    dropdown.classList.toggle("hidden");
}

// Optional: sembunyikan dropdown saat klik di luar area
window.addEventListener("click", function(e) {
    const profile = document.getElementById("ProfileDropDown");
    const avatar = e.target.closest("img");
    const name = e.target.closest("a");

    if (!profile.contains(e.target) && !avatar && !name) {
        profile.classList.add("hidden");
    }
});

function sidebarToggle() {
    const sidebar = document.getElementById("sidebar");
    sidebar.classList.toggle("hidden");
}
</script>

</body>

</html>