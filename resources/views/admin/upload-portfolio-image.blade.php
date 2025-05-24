<!-- Simple Image Upload Form (Optional) -->
<!-- Add this to your admin area if you want to upload images via web interface -->

<form action="{{ route('admin.upload-portfolio-image') }}" method="POST" enctype="multipart/form-data">
    @csrf

    <div class="mb-3">
        <label for="project_name" class="form-label">Project Name</label>
        <select name="project_name" id="project_name" class="form-control" required>
            <option value="laravel-portfolio">Laravel Portfolio</option>
            <option value="flutter-weather">Flutter Weather App</option>
            <option value="react-native-planner">React Native Planner</option>
            <option value="php-crud-system">PHP CRUD System</option>
        </select>
    </div>

    <div class="mb-3">
        <label for="image" class="form-label">Project Image</label>
        <input type="file" name="image" id="image" class="form-control"
            accept="image/jpeg,image/png,image/webp" required>
        <div class="form-text">
            Upload JPG, PNG, or WebP. Max size: 2MB. Recommended: 1200x800px
        </div>
    </div>

    <button type="submit" class="btn btn-primary">Upload Image</button>
</form>
