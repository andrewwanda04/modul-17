<div class="d-flex">
    <!-- Show Employee -->
    <a href="{{ route('employees.show', ['id' => $employee->id]) }}" class="btn btn-outline-dark btn-sm me-2">
        <i class="bi-person-lines-fill"></i>
    </a>

    <!-- Edit Employee -->
    <a href="{{ route('employees.edit', ['id' => $employee->id]) }}" class="btn btn-outline-dark btn-sm me-2">
        <i class="bi-pencil-square"></i>
    </a>

    <!-- Delete Employee -->
    <div>
        <form action="{{ route('employees.destroy', ['id' => $employee->id]) }}" method="POST"
            onsubmit="return confirm('Are you sure you want to delete this employee?');">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-outline-dark btn-sm me-2 btn-delete"
                data-name="{{ $employee->firstname . ' ' . $employee->lastname }}">
                <i class="bi-trash"></i>
            </button>
        </form>
    </div>
</div>
