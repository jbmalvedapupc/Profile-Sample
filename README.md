1. Create database `profile_sample`  
2. Run ```php artisan migrate:fresh```  
3. Run ```php artisan db:seed```  
4. Run ```php aritsan serv``` 

---
About Request Object
```php
        // Lahat ng fields kukunin.
        $request->all();
        
        // Ung field lang na needed.
        $request->only('img_filename');

        // Hindi kukunin ung field.
        $request->except('img_filename');
```
---
Remember in OOP, you can pass a **whole object**  
```php
        public function update(Request $request, Employee $employee)
        {
            $employee->update([
                'img_filename' => $request['img_filename']
            ]);

            return redirect()->route('employees.show', $employee);
        }
```
