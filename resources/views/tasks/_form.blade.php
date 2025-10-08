@csrf

<div class="mb-3">
  <label class="form-label">Title</label>
  <input type="text" name="title" value="{{ old('title', $task->title ?? '') }}" class="form-control" required>
  @error('title') <div class="text-danger">{{ $message }}</div> @enderror
</div>

<div class="mb-3">
  <label class="form-label">Description</label>
  <textarea name="description" class="form-control">{{ old('description', $task->description ?? '') }}</textarea>
</div>

<div class="mb-3">
  <label class="form-label">Due Date</label>
  <input type="date" name="due_date" 
         value="{{ old('due_date', isset($task->due_date) ? $task->due_date->format('Y-m-d') : '') }}" 
         class="form-control">
</div>


<button class="btn btn-primary">Save</button>
