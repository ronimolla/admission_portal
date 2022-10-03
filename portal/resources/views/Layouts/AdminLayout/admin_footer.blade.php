 <!-- Footer -->
 <footer class="footer mt-auto">
    <div class="copyright bg-white">
        <p>
            Copyright &copy; <span id="copy-year"></span> Admission Portal Version 1.1 - Developed by BYLC IT
        </p>
    </div>
    <script>
        var d = new Date();
        var year = d.getFullYear();
        document.getElementById("copy-year").innerHTML = year;
    </script>
</footer>